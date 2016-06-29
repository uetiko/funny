'''
Un divertido fizzbuzz
'''
def fizz(fn, number):
    for x in range(number):
        fn(x)

def buzz(x):
    if x % 3 == 0 and x % 5 == 0:
        print 'FizzBuzz'
    elif x % 3 == 0:
        print 'Fizz'
    elif x % 5 == 0:
        print 'Buzz'
    else:
        print x


fizz(buzz, 50)
