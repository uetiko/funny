def closure = { it ->
  println "Esto es un texto ${it}"
}
def shout = { src ->
  return src.toUpperCase()
}

closure('muy feliz!')
println shout('Hola mundo')
