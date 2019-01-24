var num = Math.floor(Math.random(1,3999)*3000)
console.log(num)

var roma = [
    ['','M','MM','MMM'],
    ['','C','CC','CCC','CD','D','DC','DCC','DCCC','CM'],
    ['','X','XX','XXX','XL','L','LX','LXX','LXXX','XC'],
    ['','I','II','III','IV','V','VI','VII','VIII','IX'],
]

var divisor = [1000, 100, 10 ,1]
var str =''

divisor.forEach(function(v, k, divisor){
    str += roma[k][Math.floor(num/v)]
    num = num%v
})

return str

