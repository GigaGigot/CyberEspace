
        <script src="../jquery.orgchart.js"></script>
        <script>
        $(function() {
            $("#organisation").orgChart({container: $("#main")});
        });
        </script>
        
<ul id="organisation">
    <li>
        Batman
        <ul>
            <li>
                Batman Begins
                <ul>
                    <li>Ra's Al Ghul</li>
                    <li>Carmine Falconi</li>
                </ul>
            </li>
            <li>
                Batman the dark knight
                <ul>
                    <li>Joker</li>
                    <li>Harvey Dent</li>
                </ul>
            </li>
            <li>
                The dark knight rises
                <ul>
                    <li>Bane</li>
                    <li>Talia Al Ghul</li>
                </ul>
            </li>
        </ul>
    </li>
</ul>

<div id="main">
</div>