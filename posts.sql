-- Create the posts table
CREATE TABLE IF NOT EXISTS posts (
                                     id INT AUTO_INCREMENT PRIMARY KEY,
                                     title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    excerpt VARCHAR(255),
    content TEXT
    );

-- Insert sample articles
INSERT INTO posts (title, slug, excerpt, content) VALUES
                                                      ('The Future of Technology', 'the-future-of-technology', 'Exploring innovations shaping the future.', 'Technology is advancing at an unprecedented pace...'),
                                                      ('Climate Change and Its Impact', 'climate-change-and-its-impact', 'Understanding global warming and its effects.', 'Climate change is one of the most pressing issues...'),
                                                      ('The Importance of Mental Health', 'the-importance-of-mental-health', 'Why mental health matters in today’s world.', 'Mental health awareness has grown significantly...'),
                                                      ('How to Start a Business', 'how-to-start-a-business', 'A guide to launching your own company.', 'Starting a business is both exciting and challenging...'),
                                                      ('Traveling on a Budget', 'traveling-on-a-budget', 'Tips for affordable travel experiences.', 'Traveling doesn’t have to be expensive if you know...'),
                                                      ('The Basics of Web Development', 'the-basics-of-web-development', 'An introduction to building websites.', 'Web development is an essential skill in today’s digital world...'),
                                                      ('Healthy Eating Habits', 'healthy-eating-habits', 'Simple ways to improve your diet.', 'Eating healthy is crucial for maintaining physical and mental well-being...'),
                                                      ('The Rise of Remote Work', 'the-rise-of-remote-work', 'How remote work is changing industries.', 'Remote work has become increasingly popular...'),
                                                      ('Investing 101', 'investing-101', 'An introductory guide to investing.', 'Investing can be a powerful way to grow your wealth...'),
                                                      ('Learning a New Language', 'learning-a-new-language', 'Benefits of multilingualism and tips to get started.', 'Learning a new language can open doors to new cultures...');
