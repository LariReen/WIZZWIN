let Case= document.getElementsByClassName('case')

let date = new Date();
let year = date.getFullyear();
let month = date.getFullMonth() + 1;
let day = date.getDate();

const monthName = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];

const UP_MONTH = 'upMonth'
const DOWN_MONTH = 'downMonth'

function CALENDRIER_REDUCER(action) {
    switch (action) {
        case UP_MONTH:
            if (month < 12) month++
            else{
                year++
                month = 1
            }
            break;
        case DOWN_MONTH:
            if (month > 0) month--
            else{
                year--
                month = 12
            }
            break;  

        default:
            break;

    }
    calendrier()

}
document.getElementById('avant').onclick = function () {
    CALENDRIER_REDUCER(DOWN_MONTH)
    console.log(month)
}
document.getElementById('apres').onclick = function () {
    CALENDRIER_REDUCER(UP_MONTH)
    console.log(month)
}
function calendrier(year,month){
     const monthNb = month + 12 * (year -2020)
     let cld = [{dayStart: 2, length: 31, year: 2020, month: "janvier"}]
     for(let i = 0; i < monthNb -1; i++){
        let yearSimulé = 2020 + Math.floor(i / 12)
        const monthsSimuléLongueur = [31, getFévrierLength(yearsSimulé), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]
        let monthSimuléCalendrier  = (i + 1) - (yearSimulé -2020) * 12

        cld[i + 1] = {
            dayStart: (cld[i].dayStart + monthsSimuléLongueur [monthSimuléCalendrier - 1]) & 7, 
            length: monthSimulélongueur[monthSimuléCalendrier],
            year: 2020 + Math. floor ((i + 1) / 12), 
            month: monthName [monthSimuléCalendrier]         
     }
     if (cld[i + 1].month === undefined) {
        cld[i + 1].month = "janvier"
        cld[i + 1].length = 31
     }
    }
    for(let i = 0; i < Cases.length; i++){
         Cases[i].innerText= ""

    }
    for(let i = 0; i - 1 < cld[cld.length - 1].length; i++){
        Cases[i - 1 + cld[cld.length - 1].dayStart].innerText = i

   }
}
calendrier()
