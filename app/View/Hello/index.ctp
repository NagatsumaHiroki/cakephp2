<!DOCTYPE html>
<html>
    <head>
        <title><?=$title ?></title>
    </head>
    <body>
        <header><?=$title ?></header>
        <div>
            <table>
                <form method="post" action="/CakePHP2/hello/form">
                <tr>
                    <th>name</th>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <th>mail</th>
                    <td><input type="text" name="mail"></td>
                </tr>
                <tr>
                    <th>age</th>
                    <td><input type="text" name="age"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><button>Click</button></td>
                </tr>
                </form>
            </table>
        </div>
    </body>
</html>