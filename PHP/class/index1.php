<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        class Person {
            //final 修饰不能被继承
            final public function honk() {
                return "HONK HONK!";
            }
            //静态变量，可以直接通过类名使用
            public static function say() {
                echo "Here are my thoughts!";
            }
        }
        //继承父类的子类
        class Blogger extends Person {
            //const 不用$符号，常值
            const cats = 50;
#            public static function say() {
#                echo "Here are my thoughts!";
#            }
        }
        Blogger::say();
        echo Blogger::cats;
      ?>
    </p>
  </body>
</html>
<!-->
Useful object and class methods, like property_exists() and method_exists();
Inheritance;
How child classes can override the behavior of their parents;
How parent classes can prevent this with the final keyword;
What class constants are and how to reach them using the scope resolution operator, ::;
How to access class methods and properties without creating an instance of the class by using the static keyword and the scope resolution operator together.
<-->
