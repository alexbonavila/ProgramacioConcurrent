function foo() {
    console.log('Foo')
}

process.nextTick(foo);

console.log('Bar');
