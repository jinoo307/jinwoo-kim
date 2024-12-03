<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments and Feedback</title>
    <link rel="shortcut icon" href="images/mini fig.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
<style>
        
       .container {
            max-width: 600px;
            margin: 0 auto;
           
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: black;
        }
       
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"], input[type="email"], textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="radio"], input[type="checkbox"] {
            margin-right: 10px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
    </style>


    <header>
        <h1>Vintage Car</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="promotion.php">Promotion Details</a></li>
                <li><a href="history.php">Some history of products</a></li>
                <li><a href="about.php">About US</a></li>
                <li><a href="comments.php">Comments</a></li>
            </ul>
        </nav>
    </header>

    <!-- Survey Form Section -->
    <section>
        <div class="container">
            <h1>Vintage Car Feedback Survey</h1>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="carModel">Favorite Vintage Car Model:</label>
                <input type="text" id="carModel" name="carModel" required>

                <label for="experience">Rate Your Experience with Vintage Cars:</label>
                <select id="experience" name="experience" required>
                    <option value="">--Please choose an option--</option>
                    <option value="excellent">Excellent</option>
                    <option value="good">Good</option>
                    <option value="average">Average</option>
                    <option value="poor">Poor</option>
                </select>

                <label for="features">What Features Do You Like About Vintage Cars? (Select all that apply):</label>
                <input type="checkbox" id="design" name="features" value="design">
                <label for="design">Design</label>
                <input type="checkbox" id="performance" name="features" value="performance">
                <label for="performance">Performance</label>
                <input type="checkbox" id="history" name="features" value="history">
                <label for="history">History</label>
                <input type="checkbox" id="maintenance" name="features" value="maintenance">
                <label for="maintenance">Maintenance</label>

                <label for="comments">Additional Comments:</label>
                <textarea id="comments" name="comments" rows="4"></textarea>
                <a href="subscribe.php">
                Submit Feedback</a>
				</form>
        </div>
    </section>
          <p>&copy; 2024 SELLME company</p>
    </footer>
</body>
</html>
