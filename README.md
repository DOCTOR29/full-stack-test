# Full Stack Test
WPoets Full Stack Developer Test

Hi Full-stacker!

Great that you're interested in this exercise! Thanks a lot for making it. The exercise consits of an assignment. It is related to the WPoets working ways. Good luck and we are looking forward to hearing from you soon!

To complete these assignment you need to fork this repo. When you're done you can push your changes to your own repo (and let us know where to find it ofcourse).

<h2>Task</h2>
<ul>
  <li>Create a CRUD functionality using PHP, MySQL.</li>
	<li>Fetch the data to display the section that matches the given design using HTML5, CSS3, jQuery, Bootstrap.</li>
</ul>

<h2>Design</h2>

<h5>In Web view</h5>
<ul>
  <li>Column 1 is tabs. Each tab is a seperate slider.</li>
	<li>Clicking on the tab will change the slider in Column 2.</li>
	<li>
		Column 2 is a slider connected with column 3.
		<ul>
			<li>Which means when the slide in column 2 changes, the image in column 3 will change with it.</li>
			<li>Controls are attached to column 2 only.</li>
		</ul>
	</li>
	<li>Image in column 3 is a 1:1 image.</li>
</ul>

<h5>In Mobile view</h5>
<ul>
  <li>Column 1 changes to accordion.</li>
  <li>Column 2 is a slider with images from column 3 as background images.</li>
</ul>

<strong>Note: Please refer to the files directory for design files, relevant icons/images and styleguide.</strong>

<h2>Technical questions</h2>

Please answer the following questions in a markdown file called <code>Answers to technical questions.md</code>
<ul>
  <li>How long did you spend on the coding test? What would you add to your solution if you had more time? If you didn't spend much time on the coding test then use this as an opportunity to explain what you would add.</li>
	<li>How would you track down a performance issue in production? Have you ever had to do this?</li>
	<li>Please describe yourself using JSON.</li>
</ul>
# Answers to Technical Questions

---

## 1. How long did you spend on the coding test? What would you add to your solution if you had more time? If you didn't spend much time on the coding test then use this as an opportunity to explain what you would add.

I spent approximately 2days  on the coding test. My focus was on delivering a clean, functional, and maintainable solution within the time constraints.

If I had more time, I would have:
- Added comprehensive unit and integration tests using a testing framework .
- Improved error handling and edge case coverage.
- Applied performance optimizations (e.g., memoization or algorithmic improvements where applicable).
- Enhanced the user experience with better UI/UX if it involved frontend components.
- Written thorough documentation for easier onboarding and maintenance.

---

## 2. How would you track down a performance issue in production? Have you ever had to do this?

Yes, I have tracked down performance issues in production in the past. Here’s the general approach I follow:





1. **Optimize**:
   - Fix database bottlenecks (e.g., missing indexes, N+1 queries).
   - Introduce caching ( CDN, etc.) where appropriate.

2. **Validate**:
   - Monitor the application post-deployment to ensure the issue is resolved.

---

## 3. Please describe yourself using JSON.

```json
{
  "name": "Naveed Islam",
  "role": "Full Stack Developer",
  "skills": [
    "JavaScript",
    "TypeScript",
    "React",
    "Node.js",
    "Python",
    "PostgreSQL",
    "Docker",
    "AWS"
  ],
  "experience": "4+ years",
  "interests": [
    "building scalable web applications",
    "clean code",
    "system design",
    "DevOps practices"
  ],
  "location": "Guwahati, India",
  "availableForRelocation": true,
  "remoteFriendly": true
}
