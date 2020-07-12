# Test 5.1

<img src="https://i.imgur.com/ELsjvb4.png">

----

# Test 5.2

```sql
INSERT INTO branch (name)
VALUES ('เชียงราย'),('เชียงใหม่'),('ภูเก็ต');
```

----

# Test 5.3

Get ID first

```sql
SELECT id FROM position WHERE (name = 'sale')
```

Let's say saleID = 1

```sql
DELETE FROM position
WHERE (id = 1)

```

----

# Test 5.4

Get ID first

```sql
SELECT id FROM branch WHERE (name = 'ปัตตานี')
```

Let's say ID = 1

```sql
UPDATE branch
SET name='นราธิวาส'
WHERE (id = 1)

```

----

# Test 5.5

```sql
SELECT * FROM employee

```

---

# Test 5.6

```sql
SELECT * FROM employee AS em
INNER JOIN branch AS br
ON em.branch_id=br.id
WHERE (br.name='ระยอง') OR (br.name='กรุงเทพ')
```

---

# Test 5.7

```sql
SELECT * FROM employee AS em
INNER JOIN branch AS br
ON em.branch_id=br.id
INNER JOIN position AS po
ON em.position_id=po.id
WHERE (br.name='เลย') AND (po.name='programmer')
```

---

# Test 5.8

```sql
SELECT em.id AS employee_id, em.name AS employee_name,
br.id AS branch_id, br.name AS branch_name,
po.id AS position_id, po.name AS position_name
FROM employee AS em
INNER JOIN branch AS br
ON em.branch_id=br.id
INNER JOIN position AS po
ON em.position_id=po.id
```
