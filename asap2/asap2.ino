#include <Arduino.h>
#include <ESP8266WiFi.h>
#include <ESP8266WiFiMulti.h>
#include <ESP8266HTTPClient.h>

const int sensorPin = D1;// sensor api
const int smokeA0 = A0; // sensor asap
const int led1 = D2;//merah
const int led2 = D3;//kuning
const int led3 = D4;//hijau
const int buzzer = D5;
// Gunakan serial sebagai monitor
#define USE_SERIAL Serial
// Buat object Wifi
ESP8266WiFiMulti WiFiMulti;
// Buat object http
HTTPClient http;

float suhu;
String payload;

String url = "http://192.168.0.106/kebakaran/admin/add_data.php?asap=";

int bacasensor = 0;
int sensorThres = 230;
int api=0;

void setup() {
  pinMode(led1, OUTPUT);
  pinMode(led2, OUTPUT);
  pinMode(led3, OUTPUT);
  pinMode(buzzer, OUTPUT);
  pinMode(sensorPin, INPUT);
  pinMode(smokeA0, INPUT);
  Serial.begin(9600);
  //konfigurasi
  USE_SERIAL.setDebugOutput(false);

   for(uint8_t t = 4; t > 0; t--) {
        USE_SERIAL.printf("[SETUP] Tunggu %d...\n", t);
        USE_SERIAL.flush();
        delay(1000);
    }
 
    WiFi.mode(WIFI_STA);
    WiFiMulti.addAP("Tendaku", "kosanbarat"); // Sesuaikan SSID dan password ini

  
}

void loop() {
  digitalWrite(led3,HIGH);
  delay(500);
  digitalWrite(led3,LOW);
  int analogSensor = analogRead(smokeA0);//ini asap
  bacasensor = digitalRead(sensorPin);

  //asap
  Serial.println(analogSensor);
  
  //API
  if(bacasensor == HIGH) {
    Serial.print("1");
    api=1;
    digitalWrite(led1, HIGH);
    digitalWrite(buzzer, HIGH);
    delay(1000);
    digitalWrite(buzzer,LOW);
   // delay(50);
    }
    else
    {
      Serial.print("0");
      api=0;
       digitalWrite(led1, LOW);
       digitalWrite(buzzer, LOW);
    }
    
  // delay(700);

   // Cek apakah statusnya sudah terhubung
    if((WiFiMulti.run() == WL_CONNECTED)) {
 
        // Tambahkan nilai suhu pada URL yang sudah kita buat
        USE_SERIAL.print("[HTTP] Memulai...\n");
        http.begin( url + (String) analogSensor + "&api=" + api ); 
        
        // Mulai koneksi dengan metode GET
        USE_SERIAL.print("[HTTP] Melakukan GET ke server...\n");
        int httpCode = http.GET();
 
        // Periksa httpCode, akan bernilai negatif kalau error
        if(httpCode > 0) {
            
            // Tampilkan response http
            USE_SERIAL.printf("[HTTP] kode response GET: %d\n", httpCode);
 
            // Bila koneksi berhasil, baca data response dari server
            if(httpCode == HTTP_CODE_OK) {
                payload = http.getString();
                USE_SERIAL.println(payload);
            }
 
        } else {
 
            USE_SERIAL.printf("[HTTP] GET gagal, error: %s\n", http.errorToString(httpCode).c_str());
        }
 
        http.end();
    }
 
    delay(500);
}
