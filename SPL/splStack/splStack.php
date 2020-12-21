<?php
//SplStack Mode is LIFO (Last In First Out)
// SplStack extends SplDoublyLinkedList implements Iterator , ArrayAccess , Countable {
//     /* Methods */
//     __construct ( void )
//     setIteratorMode ( int $mode ) : void
//     /* Inherited methods */
//     public SplDoublyLinkedList::add ( mixed $index , mixed $newval ) : void
//     public SplDoublyLinkedList::bottom ( void ) : mixed
//     public SplDoublyLinkedList::count ( void ) : int
//     public SplDoublyLinkedList::current ( void ) : mixed
//     public SplDoublyLinkedList::getIteratorMode ( void ) : int
//     public SplDoublyLinkedList::isEmpty ( void ) : bool
//     public SplDoublyLinkedList::key ( void ) : mixed
//     public SplDoublyLinkedList::next ( void ) : void
//     public SplDoublyLinkedList::offsetExists ( mixed $index ) : bool
//     public SplDoublyLinkedList::offsetGet ( mixed $index ) : mixed
//     public SplDoublyLinkedList::offsetSet ( mixed $index , mixed $newval ) : void
//     public SplDoublyLinkedList::offsetUnset ( mixed $index ) : void
//     public SplDoublyLinkedList::pop ( void ) : mixed
//     public SplDoublyLinkedList::prev ( void ) : void
//     public SplDoublyLinkedList::push ( mixed $value ) : void
//     public SplDoublyLinkedList::rewind ( void ) : void
//     public SplDoublyLinkedList::serialize ( void ) : string
//     public SplDoublyLinkedList::setIteratorMode ( int $mode ) : void
//     public SplDoublyLinkedList::shift ( void ) : mixed
//     public SplDoublyLinkedList::top ( void ) : mixed
//     public SplDoublyLinkedList::unserialize ( string $serialized ) : void
//     public SplDoublyLinkedList::unshift ( mixed $value ) : void
//     public SplDoublyLinkedList::valid ( void ) : bool
// }

$q = new SplStack();

$q[] = 1;
$q[] = 2;
$q[] = 3;
$q->push(4);
$q->add(4, 5);

$q->rewind();
while ($q->valid()) {
    echo $q->current(), "\n";
    $q->next();
}
