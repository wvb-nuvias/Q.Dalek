const int ledstripRedPIN = 3;
const int ledstripGreenPIN = 6;
const int ledstripBluePIN = 5;
int ledstripRedValue = 0;
int ledstripGreenValue = 0;
int ledstripBlueValue = 0;
int ledstripRedCurrentValue = 0;
int ledstripGreenCurrentValue = 0;
int ledstripBlueCurrentValue = 0;
int ledstripDelay = 4;
int ledstripBlinkDelay = 4;
bool ledstripEnabled = false;

int incomingByte = 0; 
unsigned long previousMillis = 0;
unsigned long previousLedstripMillis = 0;
unsigned long currentMillis = 0; 

void setup() {
  analogWrite(ledstripRedPIN, 0);      
  analogWrite(ledstripGreenPIN, 0);
  analogWrite(ledstripBluePIN, 0);
      
  Serial.begin(9600); 
  
  previousLedstripMillis=millis();
  previousMillis=millis();
  
  Serial.println("{success: true, message: 'Dome Interface Ready.'}");
}

void loop() {    
  currentMillis = millis();
  
  if (Serial.available() > 0) {    
    incomingByte = Serial.read();

    switch (incomingByte) {
      case 'l':
        if (ledstripEnabled) {
          ledstripEnabled=false;
          analogWrite(ledstripRedPIN, 0);      
          analogWrite(ledstripGreenPIN, 0);
          analogWrite(ledstripBluePIN, 0);
          Serial.println("{success: true, message: 'LED Strip disabled.'}");          
        } else {
          ledstripEnabled=true;
          analogWrite(ledstripRedPIN, 255);      
          analogWrite(ledstripGreenPIN, 255);
          analogWrite(ledstripBluePIN, 255);
          Serial.println("{success: true, message: 'LED Strip enabled.'}");          
        }
        break;
      case 'r':
        if (ledstripRedValue==255) {
          ledstripRedValue=0;  
          Serial.println("{success: true, message: 'LED Strip RED to 0.'}");          
        } else {
          ledstripRedValue=255;
          Serial.println("{success: true, message: 'LED Strip RED to 255.'}");          
        }
        break;
      case 'g':
        if (ledstripGreenValue==255) {
          ledstripGreenValue=0;  
          Serial.println("{success: true, message: 'LED Strip GREEN to 0.'}");          
        } else {
          ledstripGreenValue=255;  
          Serial.println("{success: true, message: 'LED Strip GREEN to 255.'}");          
        }        
        break;
      case 'b':
        if (ledstripBlueValue==255) {
          ledstripBlueValue=0; 
          Serial.println("{success: true, message: 'LED Strip BLUE to 0.'}");          
        } else {
          ledstripBlueValue=255;  
          Serial.println("{success: true, message: 'LED Strip BLUE to 255.'}");          
        }           
        break;
    }
  }
}
