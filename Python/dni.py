def check(dni):
   
    if len(dni) != 9:
        return 1
    if not(dni[0:8].isdigit()):
        return 2
    letter = dni[8].upper()
    if letter != letters[int(dni[0:8])%23]:
        return 3
    return 4

dni = input("Type  your ID: ")

letters = "TRWAGMYFPDXBNJZSQVHLCKE"
r = check(dni)
if r == 4:
    print("It is correct")
elif r == 1:
    print("the number of character must be 9")
elif r == 2:
    print ("Wrong ID Type 8 digits and a letter")
else:
    print ("Wrong letter")