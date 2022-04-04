<html>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<body>
    <div>
        <h1>Students</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>CSS Score</th>
                <th>PHP Score</th>
                <th>JAVA Score</th>
            </tr>

            <tr>
                <td>Student</td>
                <td>Student</td>
                <td>Student</td>
                <td>Student</td>
                <td>Student</td>
            </tr>
        </table>

        <?php
        include 'studentArray.php';


        ?>

    </div>
</body>

</html>