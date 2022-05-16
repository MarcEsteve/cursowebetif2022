<?php 

// Funciones matemáticas:

// echo(pi()); // 3.1415926535898
$radio = 15;
$perimetro = 2*pi()*$radio;
// echo $perimetro;

// echo(min(0, 150, 30, 20, -8, -200));  // -200
// echo(max(0, 150, 30, 20, -8, -200));  // 150

// echo(abs(-6.7));  // returns 6.7
// echo(sqrt(64));  // returns 8
// echo(round(0.60));  // returns 1
// echo(round(0.49));  // returns 0

# ceil() es como round() redondeo hacia arriba
echo(ceil(0.60) . "<br>");
echo(ceil(0.40) . "<br>");
echo(ceil(5) . "<br>");
echo(ceil(5.1) . "<br>");
echo(ceil(-5.1) . "<br>");
echo(ceil(-5.9));
# floor() es como round() redondeo para abajo
echo(floor(0.60) . "<br>");
echo(floor(0.40) . "<br>");
echo(floor(5) . "<br>");
echo(floor(5.1) . "<br>");
echo(floor(-5.1) . "<br>");
echo(floor(-5.9));

// echo(rand());
// echo(rand(10, 100));

# TODAS LAS FUNCIONES MATEMÁTICAS EN PHP

/* 
abs()	        Devuelve el valor absoluto (positivo) de un
acos()	        Devuelve el arco coseno de un número.
acosh()	        Devuelve el coseno hiperbólico inverso de un
asin()	        Devuelve el arco seno de un número.
asinh()	        Devuelve el seno hiperbólico inverso de una n
atan()	        Devuelve el arco tangente de un número en rad.
atan2()	        Devuelve el arco tangente de dos variables x
atanh()	        Devuelve la tangente hiperbólica inversa de
base_convert()	Convierte un número de una base numérica a
bindec()	    Convierte un número binario en un número decimal.
ceil()	        Redondea un número al entero más cercano.
cos()	        Devuelve el coseno de un número.
cosh()	        Devuelve el coseno hiperbólico de un número.
decbin()	    Convierte un número decimal en un número binario
dechex()	    Convierte un número decimal en hexadecimal
decoct()	    Convierte un número decimal en un número octal
deg2rad()	    Convierte un valor en grados en un valor en radianes
exp()	        Calcula el exponente de e
expm1()	        Devuelve exp (x) - 1
floor()	        Redondea un número al número entero más cercano.
fmod()	        Devuelve el resto de x / y
getrandmax()	Devuelve el mayor valor posible devuelto
hexdec()	    Convierte un número hexadecimal en decimal
hypot()	        Calcula la hipotenusa de un ángulo recto
intdiv()	    Realiza división de enteros
is_finite()	    Comprueba si un valor es finito o no
is_infinite()	Comprueba si un valor es infinito o no
is_nan()	    Comprueba si un valor es 'no es un número'
lcg_value()	    Devuelve un número pseudoaleatorio en un rango.
log()	        Devuelve el logaritmo natural de un número.
log10()	        Devuelve el logaritmo en base 10 de un número.
log1p()	        Devuelve el registro (1 + número)
max()	        Devuelve el valor más alto de una matriz o el valor más alto de varios valores especificados.
min()	        Devuelve el valor más bajo de una matriz o el valor más bajo de varios valores especificados.
mt_getrandmax()	Devuelve el mayor valor posible devuelto por mt_rand()
mt_rand()	    Genera un número entero aleatorio usando el algoritmo Mersenne Twister
mt_srand()	    Semillas de Mersenne Twister, generador de número aleatorios
octdec()	    Convierte un número octal en un número decimal
pi()	        Devuelve el valor de PI
pow()	        Devuelve x elevado a la potencia de y
rad2deg()	    Convierte un valor en radianes en un valor en grados
rand()	        Genera un entero aleatorio
round()	        Redondea un número de coma flotante
sin()	        Devuelve el seno de un número
sinh()	        Devuelve el seno hiperbólico de un número.
sqrt()	        Devuelve la raíz cuadrada de un número.
srand()	        Siembra el generador de números aleatorios
tan()	        Devuelve la tangente de un número.
tanh()	        Devuelve la tangente hiperbólica de un número.
*/

# CONSTANTES matemáticas predefinidas de PHP

/*
CONSTANTE	            VALOR	                DESCRIPCIÓN
INF	                    INF	                    El infinito
M_E	                    2.7182818284590452354	Devoluciones e
M_EULER	                0.57721566490153286061	Devuelve la constante de Euler
M_LNPI	                1.14472988584940017414	Devuelve el logaritmo natural de PI: log_e (pi)
M_LN2	                0.69314718055994530942	Devuelve el logaritmo natural de 2: log_e 2
M_LN10	                2.30258509299404568402	Devuelve el logaritmo natural de 10: log_e 10
M_LOG2E	                1.4426950408889634074	Devuelve el logaritmo en base 2 de E: log_2 e
M_LOG10E	            0.43429448190325182765	Devuelve el logaritmo en base 10 de E: log_10 e
M_PI	                3.14159265358979323846	Devuelve Pi
M_PI_2	                1.57079632679489661923	Devuelve Pi / 2
M_PI_4	                0.78539816339744830962	Devuelve Pi / 4
M_1_PI	                0.31830988618379067154	Devuelve 1 / Pi
M_2_PI	                0.63661977236758134308	Devuelve 2 / Pi
M_SQRTPI	            1.77245385090551602729	Devuelve la raíz cuadrada de PI: sqrt (pi)
M_2_SQRTPI	            1.12837916709551257390	Devuelve 2 / raíz cuadrada de PI: 2 / sqrt (pi)
M_SQRT1_2	            0.70710678118654752440	Devuelve la raíz cuadrada de 1/2: 1 / sqrt (2)
M_SQRT2	                1.41421356237309504880	Devuelve la raíz cuadrada de 2: sqrt (2)
M_SQRT3	                1.73205080756887729352	Devuelve la raíz cuadrada de 3: sqrt (3)
NAN	                    NAN	                    No un número
PHP_ROUND_HALF_UP	    1	                    Mitades redondas hacia arriba
PHP_ROUND_HALF_DOWN	    2	                    Mitades redondas hacia abajo
PHP_ROUND_HALF_EVEN	    3	                    Redondear mitades a números pares
PHP_ROUND_HALF_ODD	    4	                    Redondear mitades a números impares
*/

?>