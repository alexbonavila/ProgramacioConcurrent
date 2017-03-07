function b(cb) {
    console.log('b');
    cb();
}

b(function () {
    console.log('a')
});