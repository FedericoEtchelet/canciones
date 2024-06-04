{include 'htmlStart.tpl'}
<div class="logouttxt">
    <a href="logout"><img src="./img/src/log-out.png" class="form-ico"> Log Out</a>
</div>
<div class="homediv">
    <div class="carddiv">
        <div class="imagecard" id="albumid" style="width: 18rem;">
            <a href="showAlbums" class="cardlink">
                <h5 class="card-title">Albums</h5>
            </a>
        </div>
    </div>

    <div class="carddiv">
        <div class="imagecard" id="songid" style="width: 18rem;">
            <a href="showAllSongs" class="cardlink">
                <h5 class="card-title">Songs</h5>
            </a>
        </div>
    </div>

    <div class="carddiv">
        <div class="imagecard" id="insertid" style="width: 18rem;">
            <a href="showAlbumForm" class="cardlink">
                <h5 class="card-title" id="inserth5">Insert Album</h5>
            </a>
        </div>
    </div>
</div>


{include 'htmlEnd.tpl'}