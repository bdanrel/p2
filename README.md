# CSCI E-15 Project P2 by Barbara Danrel

----
## Live URL
<http://p2.greenfigtree.com>

----
## GitHub URL
<https://github.com/bdanrel/p2>

----
## Description

This project is a basic XKCD password generator. It allows the user to enter the number of words the password should have and whether it should include a number and/or a special character. 

The code was separated into two different php pages: (1) index.php which is primarily used for display purposes, and (2) logic.php which contains the PHP processing to generate an XKCD password. The password is created by pulling the requested number of words from an array specified on the page, and formatting it with hyphens between words. The words are selected by randomly picking a key from the array. I had set a default of a one word long password, but it does not yet have validation on the text input field to verify that an integer between 1 and 9 is entered. 


----
## Demo
TBD

----
## Outside Code
None.