<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pieash Ahmed | Portfolio</title>
    <style>
        :root {
            --bg: #f4f7fb;
            --surface: #ffffff;
            --surface-soft: #edf3ff;
            --text: #1b2430;
            --muted: #5b6675;
            --brand: #0e6fff;
            --brand-dark: #0b58ca;
            --accent: #11b5a4;
            --ring: rgba(14, 111, 255, 0.25);
            --shadow: 0 18px 45px rgba(16, 39, 84, 0.12);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at top right, #dce8ff 0%, transparent 45%),
                radial-gradient(circle at bottom left, #d8f8f1 0%, transparent 42%),
                var(--bg);
            line-height: 1.6;
            padding: 2rem 1rem;
        }

        .container {
            max-width: 1080px;
            margin: 0 auto;
            background: var(--surface);
            border-radius: 24px;
            box-shadow: var(--shadow);
            overflow: hidden;
            border: 1px solid #e6ecf7;
        }

        .hero {
            display: grid;
            grid-template-columns: 1.3fr 1fr;
            gap: 2rem;
            padding: 3rem;
            background: linear-gradient(120deg, #ffffff 10%, #f5f9ff 100%);
        }

        .hero-tag {
            display: inline-block;
            background: var(--surface-soft);
            color: var(--brand-dark);
            padding: 0.4rem 0.9rem;
            border-radius: 999px;
            font-size: 0.86rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        h1 {
            font-size: clamp(1.9rem, 3vw, 3rem);
            line-height: 1.2;
            margin-bottom: 0.9rem;
            letter-spacing: -0.02em;
        }

        .hero p {
            color: var(--muted);
            font-size: 1.02rem;
            max-width: 60ch;
        }

        .cta {
            margin-top: 1.7rem;
            display: flex;
            gap: 0.8rem;
            flex-wrap: wrap;
        }

        .btn {
            text-decoration: none;
            padding: 0.72rem 1.1rem;
            border-radius: 10px;
            font-weight: 600;
            transition: 0.2s ease;
            border: 1px solid transparent;
        }

        .btn-primary {
            background: var(--brand);
            color: #fff;
        }

        .btn-primary:hover {
            background: var(--brand-dark);
        }

        .btn-secondary {
            background: #fff;
            color: var(--text);
            border-color: #d6deee;
        }

        .btn-secondary:hover {
            border-color: var(--brand);
            color: var(--brand-dark);
        }

        .hero-card {
            background: #fff;
            border: 1px solid #e5ecf8;
            border-radius: 18px;
            padding: 1.5rem;
            align-self: center;
        }

        .hero-card h3 {
            margin-bottom: 0.65rem;
            font-size: 1.05rem;
        }

        .hero-card p {
            color: var(--muted);
            font-size: 0.95rem;
        }

        .stats {
            margin-top: 1rem;
            display: grid;
            grid-template-columns: repeat(2, minmax(120px, 1fr));
            gap: 0.7rem;
        }

        .stat {
            background: var(--surface-soft);
            border-radius: 12px;
            padding: 0.75rem;
        }

        .stat strong {
            display: block;
            font-size: 1.15rem;
            color: var(--brand-dark);
        }

        .stat span {
            font-size: 0.84rem;
            color: var(--muted);
        }

        .section {
            padding: 2.2rem 3rem 2.8rem;
        }

        .section-title {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.35rem;
        }

        .section-title::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 54px;
            height: 3px;
            border-radius: 10px;
            background: linear-gradient(90deg, var(--brand), var(--accent));
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.7rem;
        }

        .skill {
            background: #f2f6ff;
            color: #243248;
            border: 1px solid #dae5fc;
            padding: 0.55rem 0.9rem;
            border-radius: 999px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .experience-card {
            margin-top: 1rem;
            border: 1px solid #e6edf9;
            border-left: 5px solid var(--brand);
            border-radius: 12px;
            padding: 1.1rem 1.1rem 1rem;
            background: #fcfdff;
        }

        .experience-card h4 {
            margin-bottom: 0.35rem;
        }

        .experience-card p {
            color: var(--muted);
        }

        .footer {
            padding: 1rem 3rem 2.4rem;
            color: var(--muted);
            font-size: 0.9rem;
        }

        @media (max-width: 900px) {
            .hero {
                grid-template-columns: 1fr;
                padding: 2rem;
            }

            .section {
                padding: 1.8rem 2rem 2.2rem;
            }

            .footer {
                padding: 1rem 2rem 2rem;
            }
        }

        @media (max-width: 560px) {
            body {
                padding: 0.7rem;
            }

            .container {
                border-radius: 16px;
            }

            .hero,
            .section {
                padding: 1.3rem;
            }

            .footer {
                padding: 1rem 1.3rem 1.4rem;
            }

            .stats {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <main class="container">
        <section class="hero">
            <div>
                <span class="hero-tag">Software Engineer Portfolio</span>
                <h1>Hi, I'm Pieash Ahmed</h1>
                <p>
                    I am a Software Engineer with 2 years of experience. I currently work at a software company
                    and build web applications with a strong focus on performance, maintainability, and clean architecture.
                </p>
                <div class="cta">
                    <a href="#" class="btn btn-primary">Contact Me</a>
                    <a href="#" class="btn btn-secondary">Download Resume</a>
                </div>
            </div>

            <aside class="hero-card">
                <h3>Professional Snapshot</h3>
                <p>Building scalable products and delivering business-focused software solutions.</p>
                <div class="stats">
                    <div class="stat">
                        <strong>2+</strong>
                        <span>Years Experience</span>
                    </div>
                    <div class="stat">
                        <strong>4</strong>
                        <span>Core Technologies</span>
                    </div>
                </div>
            </aside>
        </section>

        <section class="section">
            <h2 class="section-title">Skills</h2>
            <div class="skills">
                <span class="skill">React</span>
                <span class="skill">Next.js</span>
                <span class="skill">Laravel</span>
                <span class="skill">Golang</span>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title">Experience</h2>
            <article class="experience-card">
                <h4>Software Engineer</h4>
                <p>Working in a software company with 2 years of hands-on experience in modern full-stack development.</p>
                <p>Focused on React/Next.js frontends and Laravel/Golang backend services.</p>
            </article>
        </section>

        <footer class="footer">
            <p>© {{ date('Y') }} Pieash Ahmed. All rights reserved.</p>
        </footer>
    </main>
</body>
</html>
