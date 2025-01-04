#!/usr/bin/python3

import os
#import mysql.connector
import requests
import time

token = "NewLifeSpovum"


device_id = "inc_1"

BAUDRATE = 57600
PORT = "COM3"
TIMEOUT=1


temp_query= '?:2010:00::c3\r'
co2_query= '?:2020:00::c0\r'

# ser = serial.Serial(port=PORT,baudrate=BAUDRATE,timeout=TIMEOUT)

# ser.write(temp_query.encode())
# resp_temp=ser.readline()
# print(resp_temp)
# act_temp=resp_temp[18:25].decode()
# act_temp=float(act_temp)
# print(act_temp)


# ser.write(co2_query.encode())
# resp_co2=ser.readline()
# act_co2=resp_co2[20:25].decode()
# act_co2=float(act_co2)
# print(act_co2) 
#id


act_co2 = 5
act_temp = 26


URL = "http://192.168.32.84/python_php_api/api/incubator_api.php"

PARAMS = { 'device_id':device_id,'inc_co2':act_co2,'inc_temp':act_temp }

r = requests.post(url = URL, data = PARAMS,timeout=5)

print(r.text)
print(r.status_code)


