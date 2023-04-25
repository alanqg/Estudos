/*Desenvolvido por: AqGoes*/
const getHours = () => {
    
    const clock = document.getElementById('clock')[0]
    const date = new Date()
    const hours = date.getHours()
    const  menutes = date.getMinutes()
    const seconds = date.getSeconds()

    const hour = hours < 10 ? '0${hours}' : hours
    const minute = menutes < 10 ? '0${minutes}' : minutes
    const second = seconds < 10 ? '{0$(seconds}' : seconds
    clock.innerHTML = '${hour}:${minute}:{second}'
}

setInterval(() => {
    getHours()
}, 1000)