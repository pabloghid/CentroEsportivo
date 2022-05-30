<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleciona Horario</title>

    </head>
<body>

    <div class="linha">
        <div class="coluna-45" style = "width: 45%;">
            <div class="container" >
                <div class="calendar-assets">
                    <h1 id="currentDate"></h1>
                    <div class="field">
                        <label for="date">Pesquisa por data</label>
                        <form class="form-input" id="date-search" onsubmit="setDate(this)">
                            <input type="date" class="text-field" name="date" id="date" required>
                            <button type="submit" class="btn btn-small" title="Pesquisar"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="day-assets">
                        <button class="btn" onclick="prevDay()" title="Dia anterior"><i class="fas fa-chevron-left"></i> </button>
                        <button class="btn" onclick="resetDate()" title="Dia atual"><i class="fas fa-calendar-day"></i> Hoje</button>
                        <button class="btn" onclick="nextDay()" title="Próximo dia"><i class="fas fa-chevron-right"></i> </button>
                    </div>
                </div>
                <div class="calendar" id="table">
                    <div class="header">
                        <!-- Aqui é onde ficará o h1 com o mês e o ano -->
                        <div class="month" id="month-header">

                        </div>
                        <div class="buttons">
                            <button class="icon" onclick="prevMonth()" title="Mês anterior"><i class="fas fa-chevron-left"></i></button>
                            <button class="icon" onclick="nextMonth()" title="Próximo mês"><i class="fas fa-chevron-right "></i></button>
                        </div>
                    </div>
                </div>        
                <script src="https://kit.fontawesome.com/812e771e48.js" crossorigin="anonymous"></script>
            </div>
        </div>
        <div class="coluna-55" style = "width: 55%;">
            <div class="conteiner" id = "tabela">
                <table class="table caption-top">
                    <thead>
                        <tr>
                        <th scope="col">Horario</th>
                        <th scope="col">Dono</th>
                        <th scope="col">Last</th>
                        <th scope="col">Marcar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">10:00</th>
                        <td>Eduardo</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">11:00</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">13:00</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Open Sans", sans-serif;
    font-size: 14px;
    -webkit-font-smoothing: antialiased;
}

input,
button,
textarea {
    font-family: "Open Sans", sans-serif;
    font-size: 14px;
}


/* Basis */

.linha{
display: flex;
flex-flow: row wrap;
}



.btn {
    font-family: 'Open Sans';
    font-size: 1em;
    display: flex;
    justify-content: center;
    align-items: center;
    border: none;
    background: #fff;
    color: #262626;
    border-radius: 10px;
    height: 50px;
    font-weight: 600;
    min-width: 100px;
    padding: 0px 20px;
    transition: 0.2s ease;
    cursor: pointer;
    outline: 0;
}

.btn:hover {
    background: #455AF7;
}

.btn-small {
    min-width: 50px;
}


.btn-day {
    font-family: 'Open Sans';
    font-size: 1em;
    display: flex;
    justify-content: center;
    align-items: center;
    border: none;
    background: rgba(0, 0, 0, 0);
    width: 100%;
    height: 100%;
    cursor: pointer;
    z-index: 99;
    outline: 0;
    border-radius: 10px;
    transition: 0.4s all;
}

.btn-day.active {
    color: #FFF;
    font-weight: 600;
    z-index: 99;
}

.btn-day.active::before {
    position: absolute;
    content: '';
    width: 40px;
    height: 40px;
    background: #455AF7;
    border-radius: 10px;
    z-index: -1;
}

.text-field {
    padding: 10px;
    height: 50px;
    width: 200px;
    border: 1px solid #f0f0f0;
    border-radius: 10px;
    margin: 0px 10px 0 0;
}

.title {
    font-size: 1.3em;
}

.subtitle {
    font-size: 1.1em;
}

/* Calendar */

.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    min-height: 100vh;

}     


.calendar-assets {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 100%;
    padding: 10px;
}

#currentDate{
  text-align:center;
  font-size:20px;
}

.field {
    display: flex;
    width: auto;
    flex-direction: column;
    align-items: left;
    justify-content: center;
    margin: 20px 0;
}

.field label {
    margin: 2px;
}

.form-input {
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: center;
}

.day-assets {
    display: flex;
    justify-content: space-between;
    width: 324px;
}



.day-assets .btn:nth-child(2) i {
    padding: 0 10px 0 0 !important;
}

.calendar {
    height: 370px;
    width: 324px;
    border-radius: 18px;
    background: #ffffff;
	  padding: 10px;
	  user-select: none;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 18px 18px 0px 0px;
    padding: 15px;
    height: 50px;
    width: 100%;
    color: #262626;
}

.month {
    font-size: 0.7em;
}

.icon {
    padding: 10px;
    font-size: 1em;
    margin: 0 0 0 5px;
    background: #ffffff;
    color: #455af7;
    border: none;
    cursor: pointer;
    outline: 0;
}

.icon:hover {
    cursor: pointer;
}

#calendar {
    width: 100%;
}

.weekends th {
    font-size: 1em;
    color: gray;
    font-weight: 400;
    width: 40px;
    margin: 10px 0;
}

#calendar tr {
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    margin: 3px;
}

#calendar td {
    display: flex;
    height: 40px;
    width: 40px;
    justify-content: center;
    align-items: center;
    text-align: center;
    z-index: 99;
}
</style>

<script>
    const months = [
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
];

const weekdays = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];



// Váriavel principal
let date = new Date();

// Função que retorna a data atual do calendário 
function getCurrentDate(element, asString) {
    if (element) {
        if (asString) {
            return element.textContent = weekdays[date.getDay()] + ', ' + date.getDate() + " de " + months[date.getMonth()] + " de " + date.getFullYear();
        }
        return element.value = date.toISOString().substr(0, 10);
    }
    return date;
}


// Função principal que gera o calendário
function generateCalendar() {

    // Pega um calendário e se já existir o remove
    const calendar = document.getElementById('calendar');
    if (calendar) {
        calendar.remove();
    }

    // Cria a tabela que será armazenada as datas
    const table = document.createElement("table");
    table.id = "calendar";

    // Cria os headers referentes aos dias da semana
    const trHeader = document.createElement('tr');
    trHeader.className = 'weekends';
    weekdays.map(week => {
        const th = document.createElement('th');
        const w = document.createTextNode(week.substring(0, 3));
        th.appendChild(w);
        trHeader.appendChild(th);
    });

    // Adiciona os headers na tabela
    table.appendChild(trHeader);

    //Pega o dia da semana do primeiro dia do mês
    const weekDay = new Date(
        date.getFullYear(),
        date.getMonth(),
        1
    ).getDay();

    //Pega o ultimo dia do mês
    const lastDay = new Date(
        date.getFullYear(),
        date.getMonth() + 1,
        0
    ).getDate();

    let tr = document.createElement("tr");
    let td = '';
    let empty = '';
    let btn = document.createElement('button');
    let week = 0;

    // Se o dia da semana do primeiro dia do mês for maior que 0(primeiro dia da semana);
    while (week < weekDay) {
        td = document.createElement("td");
        empty = document.createTextNode(' ');
        td.appendChild(empty);
        tr.appendChild(td);
        week++;
    }

    // Vai percorrer do 1º até o ultimo dia do mês
    for (let i = 1; i <= lastDay;) {
        // Enquanto o dia da semana for < 7, ele vai adicionar colunas na linha da semana
        while (week < 7) {
            td = document.createElement('td');
            let text = document.createTextNode(i);
            btn = document.createElement('button');
            btn.className = "btn-day";
            btn.addEventListener('click', function () { changeDate(this) });
            week++;



            // Controle para ele parar exatamente no ultimo dia
            if (i <= lastDay) {
                i++;
                btn.appendChild(text);
                td.appendChild(btn)
            } else {
                text = document.createTextNode(' ');
                td.appendChild(text);
            }
            tr.appendChild(td);
        }
        // Adiciona a linha na tabela
        table.appendChild(tr);

        // Cria uma nova linha para ser usada
        tr = document.createElement("tr");

        // Reseta o contador de dias da semana
        week = 0;
    }
    // Adiciona a tabela a div que ela deve pertencer
    const content = document.getElementById('table');
    content.appendChild(table);
    changeActive();
    changeHeader(date);
    document.getElementById('date').textContent = date;
    getCurrentDate(document.getElementById("currentDate"), true);
    getCurrentDate(document.getElementById("date"), false);
}

// Altera a data atráves do formulário
function setDate(form) {
    let newDate = new Date(form.date.value);
    date = new Date(newDate.getFullYear(), newDate.getMonth(), newDate.getDate() + 1);
    generateCalendar();
    return false;
}

// Método Muda o mês e o ano do topo do calendário
function changeHeader(dateHeader) {
    const month = document.getElementById("month-header");
    if (month.childNodes[0]) {
        month.removeChild(month.childNodes[0]);
    }
    const headerMonth = document.createElement("h1");
    const textMonth = document.createTextNode(months[dateHeader.getMonth()].substring(0, 3) + " " + dateHeader.getFullYear());
    headerMonth.appendChild(textMonth);
    month.appendChild(headerMonth);
}

// Função para mudar a cor do botão do dia que está ativo
function changeActive() {
    let btnList = document.querySelectorAll('button.active');
    btnList.forEach(btn => {
        btn.classList.remove('active');
    });
    btnList = document.getElementsByClassName('btn-day');
    for (let i = 0; i < btnList.length; i++) {
        const btn = btnList[i];
        if (btn.textContent === (date.getDate()).toString()) {
            btn.classList.add('active');
        }
    }
}

// Função que pega a data atual
function resetDate() {
    date = new Date();
    generateCalendar();
}

// Muda a data pelo numero do botão clicado
function changeDate(button) {
    let newDay = parseInt(button.textContent);
    date = new Date(date.getFullYear(), date.getMonth(), newDay);
    generateCalendar();
}

// Funções de avançar e retroceder mês e dia
function nextMonth() {
    date = new Date(date.getFullYear(), date.getMonth() + 1, 1);
    generateCalendar(date);
}

function prevMonth() {
    date = new Date(date.getFullYear(), date.getMonth() - 1, 1);
    generateCalendar(date);
}


function prevDay() {
    date = new Date(date.getFullYear(), date.getMonth(), date.getDate() - 1);
    generateCalendar();
}

function nextDay() {
    date = new Date(date.getFullYear(), date.getMonth(), date.getDate() + 1);
    generateCalendar();
}

document.onload = generateCalendar(date);

</script>

</html>