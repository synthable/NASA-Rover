# NASA-Rover
A silly code example dealing with a 2D grid and some rovers exploring the grid


# Instructions
A squad of robotic rovers is to be landed by NASA on a plateau on Mars. The rovers 
must navigate this plateau, which is curiously rectangular, so that their on-board cameras 
can get a complete view of the surrounding terrain to send back to Earth.

A rover's position and location is represented by a combination of x and y co-ordinates 
and a letter representing one of the four cardinal compass points. The plateau is divided 
up into a grid to simplify navigation. An example position might be 0, 0, N, which means 
the rover is in the bottom left corner and facing North.

In order to control a rover, NASA sends a simple string of letters. The possible letters are 
'L', 'R' and 'M'. 'L' and 'R' makes the rover spin 90 degrees left or right respectively, 
without moving from its current spot. 'M' means move forward one grid point, and 
maintain the same heading.

Assume that the square directly North from (x, y) is (x, y+1).

<strong>INPUT:</strong>

The first line of input contains the upper-right coordinates of the plateau, the lower-left 
coordinates are assumed to be 0,0.

The rest of the input is information pertaining to the rovers that have been deployed. Each 
rover has two lines of input. The first line gives the rover's position, and the second line is 
a series of instructions telling the rover how to explore the plateau.

The position is made up of two integers and a letter separated by spaces, corresponding to 
the x and y co-ordinates and the rover's orientation.

Each rover will be finished sequentially, which means that the second rover won't start to 
move until the first one has finished moving.

# How To Run
user@ubuntu:~/NASA$ php -v
PHP 5.6.4-4ubuntu6 (cli) (built: Apr 17 2015 15:47:51)

Copyright (c) 1997-2014 The PHP Group

Zend Engine v2.6.0, Copyright (c) 1998-2014 Zend Technologies
    with Zend OPcache v7.0.4-dev, Copyright (c) 1999-2014, by Zend Technologies


user@ubuntu:~/NASA$ php ./tests/phpunit.phar --bootstrap ./tests/bootstrap.php tests/
PHPUnit 4.7.6 by Sebastian Bergmann and contributors.

......

Time: 538 ms, Memory: 11.75Mb

OK (6 tests, 33 assertions)
