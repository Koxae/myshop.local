function hover_boards_open_tab(evt, cityName) {
    var hover_boards_i, hover_boards_tabcontent, hover_boards_tablinks;
    hover_boards_tabcontent = document.getElementsByClassName("tabcontent");
    for (hover_boards_i = 0; hover_boards_i < hover_boards_tabcontent.length; hover_boards_i++) {
        hover_boards_tabcontent[hover_boards_i].style.display = "none";
    }
    hover_boards_tablinks = document.getElementsByClassName("tablinks");
    for (hover_boards_i = 0; hover_boards_i < hover_boards_tablinks.length; hover_boards_i++) {
        hover_boards_tablinks[hover_boards_i].className = hover_boards_tablinks[hover_boards_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
    jQuery( ".tab-sec .tablinks" ).first().addClass( "active" );
});