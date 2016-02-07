<?php 
 /* 1.However, whereas an abstract class has a
parent - child relationship with the class that extends it, this relationship doesn ’ t exist with interfaces.
Instead, a class implements an interface. (At the same time, the class can also extend a parent class.)*/
/*
 * 2.You create an interface much like a class, except that you use the keyword interface rather than
 *class . You then specify a list of methods that implementing classes must include:
 */

/*
 * 3. Interfaces can ’ t contain properties; they can only contain method declarations (which can ’ t contain any
 * implementation code). What ’ s more, all methods in an interface must be public (otherwise it wouldn ’ t be
 * much of an interface!).
 */
/*
 * 4. You can then make a class implement an interface using the implements keyword:class MyClass implements MyInterface {
 */
interface DotSyntax
{
    public function UsesDotSyntax();
}