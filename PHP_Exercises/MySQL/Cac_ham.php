________________________
affected_rows() function
.=> Hàm này trả về số hàng bị ảnh hưởng trong truy vấn SELECT, INSERT, UPDATE, REPLACE hoặc DELETE trước đó

.VD: $mysqli = new mysqli("localhost", "user1", "datasoft123", "hr");
./* Insert rows */
.$mysqli->query("CREATE TABLE Language SELECT * from CountryLanguage");
.printf("Affected rows (INSERT): %d\n", $mysqli->affected_rows);

.$mysqli->query("ALTER TABLE Language ADD Status int default 0");

./* update rows */
.$mysqli->query("UPDATE Language SET Status=1 WHERE Percentage > 50");
.printf("Affected rows (UPDATE): %d\n", $mysqli->affected_rows);

./* delete rows */
.$mysqli->query("DELETE FROM Language WHERE Percentage < 50"); ___printf("Affected rows (DELETE): %d\n", $mysqli->affected_rows);

    .________________________
    connect_error() function