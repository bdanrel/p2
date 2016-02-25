# CSCI E-15 Project P2 by Barbara Danrel

----
## Live URL
<http://p2.greenfigtree.com>

----
## GitHub URL
<https://github.com/bdanrel/p2>

----
## Description

This project is a basic XKCD password generator. It allows the user to enter the number of words the password should have and whether it should 
include a number and/or a special character. 

The code was separated into two different php pages: (1) index.php which is primarily used for display purposes, and (2) logic.php which contains 
the PHP processing to generate an XKCD password. The password is created by pulling the requested number of words from an array specified on the page, 
and formatting it with hyphens between words. The words are selected by randomly picking a key from the array. There is some server-side validation of
the field value submitted for the number of words, and if the was no value entered or an invalid value, then it will use a default value of 4 words. 

Things I would do if I could: use Bootstrap for CSS per the feedback from P1, scrape a wordlist to get a bigger selection of words for use, and display an error message on 
the web page when the validation of the Number of Words field failed and it used the default value instead.


----
## Demo
<http://screencast.com/t/w8vfrKXzAq>

----
## Outside Code
None.