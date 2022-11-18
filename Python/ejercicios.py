

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


####################################################################################################



clientes = {}
opcion = ''
while opcion != '6':
    if opcion == '1':
        nif = input('Introduce NIF del cliente: ')
        nombre = input('Introduce el nombre del cliente: ')
        direccion = input('Introduce la dirección del cliente: ')
        telefono = input('Introduce el teléfono del cliente: ')
        email = input('Introduce el correo electrónico del cliente: ')
        vip = input('¿Es un cliente preferente (S/N)? ')
        cliente = {'nombre':nombre, 'dirección':direccion, 'teléfono':telefono, 'email':email, 'preferente':vip=='S'}
       
        clientes[nif] = cliente
    if opcion == '2':
        nif = input('Introduce NIF del cliente: ')
        if nif in clientes:
            del clientes[nif]
        else:
            print('No existe el cliente con el nif', nif)
    if opcion == '3':
        nif = input('Introduce NIF del cliente: ')
        if nif in clientes:
            print('NIF:', nif)
            for clave, valor in clientes[nif].items():
                print(clave + ':', valor)
        else:
            print('No existe el cliente con el nif', nif)
    if opcion == '4':
        print('Lista de clientes')
        for clave, valor in clientes.items():
            print(clave, valor['nombre'])
    if opcion == '5':
        print('Lista de clientes preferentes')
        for clave, valor in clientes.items():
            if valor['preferente']:
                print(clave, valor['nombre'])
    opcion = input('Menú de opciones\n(1) Añadir cliente\n(2) Eliminar cliente\n(3) Mostrar cliente\n(4) Listar clientes\n(5) Listar clientes preferentes\n(6) Terminar\nElige una opción:')