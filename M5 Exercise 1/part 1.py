import turtle
import random
import math


turtle.speed("fastest")

def ellipse(self, x_radius, y_radius, steps=60):
    heading_radians = math.radians(self.heading())
    theta_radians = -math.pi / 2
    extent_radians = 2 * math.pi
    step_radians = extent_radians / steps
    extent_radians += theta_radians
    x_center, y_start = self.position()
    y_center = y_start + y_radius

    cos_heading, sin_heading = math.cos(heading_radians), math.sin(heading_radians)

    while True:
        x, y = x_center + math.cos(theta_radians) * x_radius, y_center + math.sin(theta_radians) * y_radius
        # readjust x & y to set the angle of the ellipse based on the original heading of the turtle
        x, y = x - x_center, y - y_start
        x, y = x * cos_heading - y * sin_heading, x * sin_heading + y * cos_heading
        x, y = x + x_center, y + y_start

        self.setheading(self.towards(x, y))  # turtle faces direction in which ellipse is drawn
        self.goto(x, y)

        if theta_radians == extent_radians:
            break

        theta_radians = min(theta_radians + step_radians, extent_radians)  # don't overshoot our starting point


def drawPolygon(myTurtle, numSides):
    turnAngle = 360/int(numSides)
    sideOne=random.randint(40, 200)
    sideTwo=random.randint(40, 200)

    myTurtle.color((random.random(), random.random(), random.random()), (random.random(), random.random(), random.random())) #color() sets pen and fill color
    for i in range(numSides//2):
        myTurtle.forward(sideOne)
        myTurtle.right(turnAngle)
        myTurtle.forward(sideTwo)
        myTurtle.right(turnAngle)
        



def drawFilledCircle(myTurtle, sideLength, radius):
    
   
    myTurtle.color((random.random(), random.random(), random.random()), (random.random(), random.random(), random.random())) #color() sets pen and fill color

    myTurtle.begin_fill()
    ellipse(myTurtle, sideLength, radius)
    myTurtle.end_fill()

def drawCircle(myTurtle, sideLength, radius):
   

    
    myTurtle.color((random.random(), random.random(), random.random()), (random.random(), random.random(), random.random())) #color() sets pen and fill color

   
    ellipse(myTurtle, sideLength, radius)
   
def drawFilledPolygon(myTurtle,numSides):
    myTurtle.begin_fill()
    drawPolygon(myTurtle,numSides)
    myTurtle.end_fill()

for x in range(10): 
    turtle.up()
    turtle.goto(random.randint(-600, 0),random.randint(0, 600))
    turtle.down()
    drawCircle(turtle, random.randint(40, 200),random.randint(40, 200))
    turtle.up()
    turtle.goto(random.randint(-600, 0),random.randint(-600, 0))
    turtle.down()
    drawPolygon(turtle, 4)
    turtle.up()
    turtle.goto(random.randint(0, 600),random.randint(0, 600))
    turtle.down()
    drawFilledCircle(turtle, random.randint(40, 200),random.randint(40, 200))
    turtle.up()
    turtle.goto(random.randint(0, 600),random.randint(-600, 0))
    turtle.down()
    drawFilledPolygon(turtle, 4)

turtle.exitonclick()