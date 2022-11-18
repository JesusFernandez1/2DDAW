def zoom (matriz):
    dim = len(matriz)*2
    zoom = [0] * dim
   
    for i in range(dim):
        zoom[i] = [0] * len(matriz[0])*2
   
    for i in range(len(matriz)):
        for j in range(len(matriz[i])):
            for f in range(0,2):
                for c in range (0,2):
                    zoom[i*2+f][j*2+c] = matriz[i][j]

    return zoom



def printMatriz (m):
    s=""
    for row in m:
        for elem in row:
            s = s+ str(elem)+"  "
        s+="\n"
    return s




def enter_matriz(fila,col):
    matriz = []
    for i in range(fila):
        a = [0]*col
        matriz.append(a)
    for i in range(fila):
        for c in range(col):
            matriz[i][c]= input("Elemento:")
    return matriz



    

a = [[1, 2,6], [3,4,5]]
z = zoom(a)
b = enter_matriz(3,2)
print(b)
print("matriz a")

print(printMatriz(a))
print ("Matriz z")
print(printMatriz(z))
z = zoom(z)
print(printMatriz(z))
z = zoom(z)
print(printMatriz(z))







tabla=[]
altura = 100
for i in range (10):
     altura = altura *3 /5.0
     tabla.append( altura)
for elem in tabla:
    print (round(elem,4))