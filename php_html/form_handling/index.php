<html>
<body>
    <h2>Basic Calculator</h2>
    <form action="addition.php" method="GET">
        <label>Number 1:</label>
        <input type="number" name="add_first" required>
        <br>
        <label>Number 2:</label>
        <input type="number" name="add_second" required>
        <br>
        <label>Operation:</label>
        <select name="operation"> 
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>
        <br>
        <input type="submit" value="Calculate">
    </form>

    <h2>Division Calculator</h2>
    <form action="division.php" method="GET">
        <label>Number:</label>
        <input type="number" name="div_num" required>
        <br>
         <label>Number 2:</label>
        <input type="number" name="div_den" required>
        <br>
        
         <select name="operation"> 
            <option value="divide">Division (/)</option>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            
        </select>
        <br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>