INSERT INTO coffee(NAME,
                   description,
                   price,
                   image_url)
VALUES ("Espresso",
        "Rich and bold, our espresso is the perfect pick-me-up.",
        11.99,
        "images/coffee/espresso.jpg"),
       ("Americano",
        "Our Americano is a smooth blend of espresso and hot water, offering a milder flavor for those who prefer a less intense coffee experience.",
        11.99,
        "images/coffee/americano.jpg"),
       ("Cappuccino",
        "A classic Italian favorite, our cappuccino combines espresso, steamed milk, and a delicate layer of frothy milk foam for a delightful balance of flavors.",
        9.99,
        "images/coffee/cappuccino.jpg"),
       ("Latte",
        "Our latte features a harmonious mix of espresso and steamed milk, creating a creamy and comforting beverage perfect for any time of day.",
        10.99,
        "images/coffee/latte.jpg"),
       ("Mocha",
        "Indulge in our mocha, a delectable blend of espresso, rich chocolate syrup, and steamed milk, topped with a dollop of whipped cream.",
        10.99,
        "images/coffee/mocha.jpg"),
       ("Flat White",
        "Originating in Australia and New Zealand, our flat white combines espresso with velvety steamed milk, resulting in a smooth and creamy texture.",
        15.99,
        "images/coffee/flat_white.jpg"),
       ("Iced Coffee",
        "Our refreshing iced coffee is brewed to perfection and served over ice for a cool and invigorating treat on a hot day.",
        7.99,
        "images/coffee/iced_coffee.jpg"),
       ("Cold Brew",
        "Steeped for hours in cold water, our cold brew coffee offers a smooth and flavorful taste with lower acidity, perfect for those who prefer a less bitter coffee experience.",
        11.99,
        "images/coffee/cold_brew.jpg"),
       ("Macchiato",
        "Our Macchiato is a bold espresso marked with a dollop of frothy milk, creating a strong yet balanced coffee delight.",
        12.99,
        "images/coffee/macchiato.jpg");

UPDATE coffee
SET name_arabic        = "إسبرسو",
    description_arabic = "غنية وجريئة ، إسبرسو لدينا هي الإختيار المثالي لتنشيطك."
WHERE name = "Espresso";

UPDATE coffee
SET name_arabic        = "أمريكانو",
    description_arabic = "مزيج سلس من الإسبرسو والماء الساخن ، ونكهة أقل حدة لمن يفضل تجربة قهوة معتدلة."
WHERE name = "Americano";

UPDATE coffee
SET name_arabic        = "كابتشينو",
    description_arabic = " القهوة الإيطالية الكلاسيكية ، يجمع كابتشينو لدينا بين الإسبرسو والحليب المبخر ، وطبقة رقيقة من رغوة الحليب لتحقيق توازن رائع من النكهات."
WHERE name = "Cappuccino";

UPDATE coffee
SET name_arabic        = "لاتيه",
    description_arabic = "يتميز اللاتيه لدينا بمزيج متناغم من الإسبرسو والحليب المبخر ، مما يخلق مشروبًا كريميًا ومريحًا مثاليًا في أي وقت من اليوم."
WHERE name = "Latte";

UPDATE coffee
SET name_arabic        = "موكا",
    description_arabic = "دلل نفسك بالموكا لدينا ، مزيج لذيذ من الإسبرسو ، وشراب الشوكولاته الغني ، والحليب المبخر ، مع قليل من الكريمة المخفوقة."
WHERE name = "Mocha";

UPDATE coffee
SET name_arabic        = "فلات وايت",
    description_arabic = "من أستراليا ونيوزيلندا ، يجمع فلات وايت لدينا بين الإسبرسو والحليب المبخر ، مما يؤدي إلى نسيج ناعم وكريمي."
WHERE name = "Flat White";

UPDATE coffee
SET name_arabic        = "قهوة مثلجة",
    description_arabic = "تم تحضير قهوتنا المثلجة بكل الكمال وتقدم على الثلج لتعتبر معاملة منعشة ومنشطة في يوم حار."
WHERE name = "Iced Coffee";

UPDATE coffee
SET name_arabic        = "كولد برو",
    description_arabic = "تم تنقيع قهوتنا الباردة لساعات في الماء البارد ، وتقدم نكهة سلسة ومليئة بالنكهة مع درجة حموضة أقل ، مثالية لمن يفضل تجربة قهوة أقل مرارة."
WHERE name = "Cold Brew";

UPDATE coffee
SET name_arabic        = "ماكياتو",
    description_arabic = "ماكياتو لدينا هو إسبرسو جريء معلم بقليل من الحليب الرغوي ، مما يخلق متعة قهوة قوية ومتوازنة."
WHERE name = "Macchiato";
