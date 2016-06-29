'''
Un divertido fizzbuzz
'''
def fizz(fn, number):
    '''
    Función que detona el closure dentro de
    un for que recibe un rango
    '''
    for x in range(number):
        fn(x)

def buzz(x):
    '''
    La funcion que hace la magia pokemon del
    fizzbuzz
    '''
    if x % 3 == 0 and x % 5 == 0:
        print 'FizzBuzz'
    elif x % 3 == 0:
        print 'Fizz'
    elif x % 5 == 0:
        print 'Buzz'
    else:
        print x


fizz(buzz, 50)
