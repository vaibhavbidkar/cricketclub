function avg()
{
        runs = document.getElementById("runs").value;
        matches = document.getElementById("matches").value;
        notOuts = document.getElementById("no").value;
        document.getElementById("avg").innerHTML = (runs/(matches-notOuts)).toFixed(2);
}

function sr()
{
        runs = document.getElementById("runs").value;
        ballsFaced=document.getElementById("bf").value;
        document.getElementById("sr").innerHTML = ((runs/ballsFaced)*100).toFixed(2);
}

function sr1()
{
        ballsBowled = document.getElementById("bb").value;
        wickets=document.getElementById("wk").value;
        document.getElementById("sr1").innerHTML = (ballsBowled/wickets).toFixed(2);
}

function eco()
{
        ballsBowled = document.getElementById("bb").value;
        runsGiven=document.getElementById("rg").value;
        document.getElementById("eco").innerHTML = (runsGiven/(ballsBowled/6)).toFixed(2);
}





