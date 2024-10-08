# Q.Dalek

![Alt text](./images/dalek.svg)

## Description

This project includes source for controlling my own build of a fullsize Dalek.

## Dome Description

The dome contains an arduino to control up down of eye stalk. This is a brushed motor, it will be controlled by a h-bridge.
The dome will also containt the raspberry pi, and will be able to control the servo that moves the eyestalk.  The dome has its own 12V battery, to power the motors and the raspberry pi.

## Middle section

The middle section will contain a raspberry pi 4, which is connected to wifi.  If not connected to any wifi, it wil be a wifi access point itself.  It is running the Q.Dalek code in an apache2, via php.  A MySQL database contains data this php code uses to display data.  It is accessible by browser, and by default started in a browser on the raspberry pi 4 touch display.  This touch display is then used to play sound effects, speech and controls the various section of the Dalek with simple push buttons.

The Dome arduino and other arduino's will be connected to this Raspberry.

## Skirt section

## Fender section
 
The fender section will contain the motor hoverboard controls, as well as two batteries (12V) and the hoverboard battery. below the fender esction there are LED strips that will display effects beneath the Dalek whilst it is driving.

## Developer

This Dalek is being developed by The Q Continuum, Wouter Vanbelleghem <wouter@qcontinuum.be>, and it's code is being hosted in this git library, for easy updating and installing into the various components.

## Raspberry PI pinout 

| Pin | Function | Goes to | Color Wire |
| --- | --- | --- | --- |
| 1 | 5V positive   | Step up/down Positive | Red |
| 2 | 5V ground     | Step up/down Negative | Black |
