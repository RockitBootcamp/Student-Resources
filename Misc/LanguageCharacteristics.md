# Language Characteristics
## (or what's all the fuss about language X?)


### What language is this?
```c
sum = 0;
for(i=0; i < 10; i++) {
  sum += numbers[i];
}



```


## Core Language Differences:
- compiled / interpreted
- type system
- memory model & management


## Compiled / Interpreted
- Compiled
  - Program is read, checked for errors, and compiled to an __executable__ first, then executed
  - Executable is either native machine-code or byte-code for a virtual machine and is fast
  - Must be compiled for different machine architectures and operating systems (VMs excepted)
  
- Intrepreted
  - Program is read, checked for errors, and interpreted each time the program is run
  - Interpreted langauages are generally slower than compiled languages
  - Allows more flexibility in terms of typing and memory management
  - User must have the language's interpreter or runtime installed on their computer

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

Manual memory management requires a considerable extra amount of work for developers and opens up whole classes of
bugs that can't happen in languages with garbage collection. But if the program is any of these:
- must be really fast and/or really small
- performs low-level i/o
- is hardware level code
- is operating system level code
- needs to run on a computer the size of a stamp

these languages provide the fast low-level control that is needed. A language with manual memory management allows
for fast direct access to memory, i/o systems & other hardware. This is ideal for operating systems and their
components, programming language tools, compilers, & interpreters, and software that pushes the memory, network, & 
cpu limits of its hardware.

### Languages with Manual Memory Management
- C/C++
- Objective-C
- Go
Tend to be us

### Languages with Garbage Collection
- PHP
- javascript
- Java/C#
- Ruby
- Python
- on and on ...

  
