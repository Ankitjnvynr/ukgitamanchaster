<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIEO Gita Gaushala Seva in India</title>

    <style>
    /* General Styles */
    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        line-height: 1.6;
        background: linear-gradient(to bottom right, #f9f5e9, #f7e092);
        color: #333;
        scroll-behavior: smooth;
    }

    .container {
        max-width: 1200px;
        margin: 50px auto;
        padding: 20px;
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 20px;
        align-items: center;
    }

    /* Header Spacing */
    .mt-3 {
        margin-top: 1rem;
    }

    /* Image Section */
    .image-container img {
        width: 100%;
        height: auto;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .image-container img:hover {
        transform: scale(1.05);
    }

    /* Text Section */
    h1,
    .heading {
        color: #58151c;
        font-size: 2rem;
        margin-bottom: 15px;
    }

    .text-container p {
        margin-bottom: 20px;
        font-size: 1.1rem;
        line-height: 1.8;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    ul li {
        margin-bottom: 15px;
        font-size: 1.1rem;
    }

    ul li::before {
        content: counter(item) ". ";
        counter-increment: item;
        font-weight: bold;
        color: #58151c;
    }

    ol {
        margin-left: 1.5rem;
    }

    a {
        color: #58151c;
        text-decoration: none;
        transition: color 0.3s;
    }

    a:hover {
        color: #c94b4b;
    }

    .callout {
        background-color: #fff4db;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .callout h1 {
        text-align: center;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            grid-template-columns: 1fr;
        }

        .image-container {
            margin-bottom: 20px;
        }
    }

    /* Side-by-Side Layout for Desktop */
.side-by-side {
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

.callout, .support-section {
    flex: 1;
    background: linear-gradient(to right, #fff5e1, #ffe7b3);
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
}

.callout:hover, .support-section:hover {
    transform: scale(1.02);
}

.callout h1, .support-section h1 {
    font-size: 1.8rem;
    text-align: center;
    margin-bottom: 20px;
    color: #58151c;
}

.callout p, .support-section p {
    line-height: 1.8;
    font-size: 1.1rem;
    margin-bottom: 20px;
    color: #4d4d4d;
}

ol {
    margin-left: 1rem;
    padding-left: 1rem;
    line-height: 1.6;
}

ol li {
    margin-bottom: 10px;
    font-size: 1.1rem;
}

a {
    color: #58151c;
    text-decoration: none;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}

/* Responsive Layout for Mobile */
@media (max-width: 768px) {
    .side-by-side {
        flex-direction: column;
    }

    .callout, .support-section {
        margin-bottom: 20px;
    }
}

    /* Footer & Support Section */
    footer {
        text-align: center;
        padding: 10px 0;
        background-color: #58151c;
        color: white;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    footer a {
        color: #f7e092;
        font-weight: bold;
    }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="mt-3">
        <?php include 'parts/_header.php' ?>
    </div>

    <div class="container">
        <!-- Image Section -->
        <div class="image-container">
            <img src="gausala-2.jpg" alt="Gau Seva Image">
        </div>

        <!-- Text Section -->
        <div class="text-container">
            <h1>GIEO Gita Gaushala Seva in India: The Importance of Gau Seva and GIEO Gita's Mission</h1>
            <p>
                Gau Seva, or service to cows, holds a special place in Indian culture, spirituality, and agricultural
                life.
                Revered as a sacred symbol of motherhood and nourishment, the cow is central to Hindu beliefs,
                representing purity, non-violence, and compassion.
            </p>
            <ul>
                <li><strong>Spiritual Significance:</strong> Serving cows (Gau Seva) is believed to purify one’s soul
                    and remove obstacles in life.</li>
                <li><strong>Ecological Impact:</strong> Cows play a vital role in sustainable agriculture by promoting
                    organic farming.</li>
                <li><strong>Economic and Agricultural Benefits:</strong> Cows provide sustenance and support rural
                    livelihoods.</li>
                <li><strong>Health and Wellness:</strong> Products derived from cows promote good health through
                    nutrients and Ayurveda.</li>
            </ul>
        </div>
    </div>
  
    





    <div class="container side-by-side">
        <!-- Callout Section -->
        <div class="callout">
            <h1>GIEO Gita's Role in Gaushala Seva</h1>
            <p>
                GIEO Gita has taken the responsibility of serving cows through its network of gaushalas (cow shelters) across India.
                These shelters provide food, medical care, and a safe environment for cows in need.
            </p>
            <ol>
                <li><strong>Cow Protection:</strong> Gaushalas provide care to abandoned and injured cows.</li>
                <li><strong>Sustainable Agriculture:</strong> Promotes the use of natural fertilizers like cow dung and urine.</li>
                <li><strong>Community Engagement:</strong> Educates locals on Gau Seva and sustainability.</li>
                <li><strong>Holistic Healthcare:</strong> Produces Ayurvedic products using cow-based ingredients.</li>
            </ol>
        </div>

        <!-- Support Section -->
        <div class="support-section">
            <h1>How You Can Support GIEO Gita's Gau Seva</h1>
            <p>There are several ways to get involved in Gau Seva through GIEO Gita:</p>
            <ol>
                <li><strong>Donations:</strong> Help maintain gaushalas and expand cow protection activities.</li>
                <li><strong>Volunteering:</strong> Assist with day-to-day activities or spread awareness.</li>
                <li><strong>Adopting a Cow:</strong> Take responsibility for a cow’s care and well-being.</li>
            </ol>
            <p>
                By supporting GIEO Gita’s initiatives, individuals not only contribute to the welfare of cows but also play a part in promoting spiritual, ecological, and economic well-being in society.
            </p>
            
        </div>
    </div>

    <div class="container">
    <p>
                For more information, visit the official GIEO Gita website: 
                <a href="https://www.gieogita.org" target="_blank">www.gieogita.org</a>.
            </p>
    </div>







</body>

</html>