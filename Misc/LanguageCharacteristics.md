# Language Characteristics
## (or what's all the fuss about language X?)


### What language is this?
```c
sum = 0;
for(i=0; i < 10; i++) {
  sum += numbers[i];
}



```
This snippet could be any of : javascript, c/c++, java, c#, ruby, and a host of others. It would be legal PHP or Perl if you blinged it up with some dollar signs...



## Core Language Differences:
- compiled / interpreted
- type system
- memory model & management
- paradigm





## Compiled / Interpreted
Programs are executed in one of two ways. They are either turned (compiled) into a program that runs directly on the computer's OS or they are "ran" or "interpreted" by a program (the interpreter) that knows how to execute programs written in a given language. There are pros and cons to each...

Compiled | Interpreted
--- | ---
Program is read, checked for errors, and compiled to an __executable__ first, then executed | Program is read, checked for errors, and interpreted each time the program is run
Executable is either native machine-code or byte-code for a virtual machine and is fast |  Interpreted langauages are generally slower than compiled languages
Must be compiled for different machine architectures and operating systems (VMs excepted) | Can be run on any machine which has an interpreter or runtime for the language
Type systems tend toward stonger and static | Type systems tend toward more flexible and dynamic
Compilation and builds can slow down the development cycle | Contributes to a faster development cycle for developers



## Type Systems
1. what is a "type system"?
1. key dimensions
  - static vs dynamic typing
  - declared vs. infered types
  - mutability
  - duck-typing?
  



## Memory Model and Memory Management
Most programming languages work with a memory model that is composed of a "stack" and a "heap". << Explain Stack Here >>>
Variables that are allocated on the stack don't need to be managed, they are easy and efficient!. Variables that are
allocated in the heap, however, require more work to manage. There are generally two ways to manage heap memory:
manually or with some kind of garbage collection. "Manually" is __very manual__ in this case and doing it wrong causes
nasty bugs.



### Manual Memory Management
Manual memory management requires a considerable extra amount of work for developers and opens up whole classes of
bugs that can't happen in languages with garbage collection. But if the program is any of these:
- must be really fast and/or really small
- performs low-level i/o
- is hardware level code
- is operating system level code
- needs to run on a computer the size of a stamp

these languages provide the fast low-level control that is needed. A language with manual memory management allows
for fast direct access to memory, i/o systems & other hardware. This is ideal for operating systems and their
components, programming language tools, compilers, & interpreters, and software that pushes the memory, i/o, & 
cpu limits of its hardware.

With manual memory management the developer must see to it that for all heap variables:
- all memory is be released/deleted as soon as it is no longer needed
- memory is NOT accessed after it has been released
- element/field accesses are within the allocated bounds

#### Languages with Manual Memory Management
- C/C++
- Objective-C (it is hybrid: manual and automatic)
- Go



### Garbage Collection
Garbage collection is a system that keeps track of all the heap variables and releases their memory when they are no longer used. This is a big deal! This means that for most cases, you don't have to even think about memory usage or management. It does come at a cost though, the overhead of the GC running can make programs slower to start, slower to run and even trigger short freezes in cases of very high cpu utilization.

#### Languages with Garbage Collection
- PHP
- javascript
- Java/C#
- Ruby
- Python
- on and on ...



## Paradigm: Procedural / Functional / Object-Oriented
### Procedural
- C/C++
- Java/C#
- Php
- Ruby
- javascript
- Python
- 

### Object Oriented
- C++
- Php
- Java/C#
- Ruby
- Python
- javascript

### Functional
- Javascript
- Php
- Ruby
- Python
- Erlang
- Lisp/Scheme
- Haskell
  
