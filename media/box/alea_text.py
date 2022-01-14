from random import *
letter= [
    "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",
    "0","1","2","3","4","5","6","7","8","9",
    "=","/","@",":",".","?","%","€","#","§","=","°","}","{","[","]","~",
]
n_char=int(input("Combien de caratères coulez vous"))
text=""

for loop in range(n_char):
    x=letter[randint(0, 52)]
    text = text + x


print(text)
input("Appuyer sur la touche entré pour terminer")