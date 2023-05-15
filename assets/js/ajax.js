$('#registration').click(() => {
    const name = $('#name').val();
    const email = $('#email').val();
    $.ajax({
        method: "POST",
        url: "regController.php",
        data: {
            name,
            email
        },
        success: function(data){
            alert(data)
            read();
        }
    })
})