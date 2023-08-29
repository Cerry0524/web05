<form>
    <div style="width: 80%;margin:auto">
        <table style="width: 80%;margin:auto">
            <tr>
                <td>電影：</td>
                <td>

                    <select name="movie" id="movie">
                    </select>
                </td>
            </tr>
            <tr>
                <td>日期：</td>
                <td>

                    <select name="date" id="date"></select>
                </td>
            </tr>
            <tr>
                <td>場次：</td>
                <td>

                    <select name="session" id="session"></select>
                </td>
            </tr>
        </table>
        <div class="ct">
            <input type="button" value="確定">
            <input type="reset" value="重置">
        </div>
    </div>
</form>
<script>
    getMovie()

    $("#movie").change(function(){
        getDate($(this).val());
    })
    $("#date").change(function(){
        getSession($("#movie option:selected").text(),$(this).val());
    })

    function getMovie() {
        $.get("./api/getMovie.php", (movie) => {
            $("#movie").html(movie);

            let id = <?= $_GET['id'] ?? 0; ?>;
            $(`#movie option[value='${id}']`).prop('selected', true)

            getDate($("#movie").val())

        })
    };
    
    function getDate(movieId){
        $.get("./api/getDate.php",{movieId},(date)=>{
            $("#date").html(date);

            getSession($("#movie option:selected").text(),$("#date").val());

        })
    }
    function getSession(movie,date){
        $.get("./api/getSession.php",{movie,date},(session)=>{
            console.log(session);
            $("#session").html(session);
        })
    }
</script>