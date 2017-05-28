from flask import Flask
from sense_hat import SenseHat
from time import sleep
from random import randint
import math


app = Flask(__name__)
sense  = SenseHat()

@app.route("/")
def hello():
    return "Hello World!"

@app.route("/turnon")
def turnon():
    r = randint(0,255)
    sense.show_letter("C", text_colour=[100, 0, 100])
    sleep(1)
    return "turn on"

@app.route("/turnoff")
def turnoff():
    r = randint(0,255)
    sense.show_letter(" ", text_colour=[100, 0, 100])
    sleep(1)
    return "turn on"

@app.route("/oneled")
def oneled():
    sense.set_pixel(7, 0, 0, 0, 255)
    sleep(1)
    return "one led on"

@app.route("/oneled/<x>")
def oneledx(x):
    sense.set_pixel(int(x), 0, 0, 0, 255)
    sleep(1)
    return x
    
@app.route("/clear")
def debugClear():
	sense.clear()
	return 'done'

@app.route("/debug/<state>/x/<x>/y/<y>")
def debug(state, x, y):
    color = 255 if (state == "on") else 0
    #sense.clear()
    sense.set_pixel(int(x), int(y), 0, 0, color)
    #sleep(5)
    #sense.clear()
    return "done"

@app.route("/debug/<state>/x/<x>")
def debugcolumn(state, x):
    color = 255 if (state == "on") else 0
    sense.clear()
    for i in range(8):
		sense.set_pixel( (int(x) - 1), i, 0, 0, color)
    #sleep(5)
    #sense.clear()
    return "done"


if __name__ == "__main__":
    app.run(host='0.0.0.0', port=80, debug=False)
