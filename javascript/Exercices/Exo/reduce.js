
const tab = ['josh', 'sosa', 'eric', 'luc'];

console.log(tab.reduce(function(cumulator, currentItem){
    cumulator = currentItem.toUpperCase();
}));