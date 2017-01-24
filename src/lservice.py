import RPi.GPIO as GPIO
import urllib2
import time

GPIO.setmode(GPIO.BOARD)

GPIO.setup(12, GPIO.OUT)

while True:
         try:
            res = urllib2.urlopen("http://192.168.1.104/rpi/data.dat");
            lstatus = res.read()
         except urllib2.HTTPError, e:
                                   print e.code
         except urllib2.URLError, e:
                                   print e.args

         print lstatus

         if lstatus == "on":
                           GPIO.output(12, 1)
         elif lstatus == "off":
                           GPIO.output(12, 0)
         
GPIO.cleanup()
