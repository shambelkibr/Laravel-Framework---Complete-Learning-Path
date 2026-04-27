
---

## 📅 DAY 6: Passing Data from Controllers to Views

Right now, your views are **static** — the same HTML every time. Real websites show **dynamic data** (username, list of products, current time).

Today you learn how to send data from controller → view.

---

### 📘 The Concept (Short & Clear)

A controller gets data (from database, from user input, from calculation) and **passes it** to a view. The view displays that data.

**Without data passing:** View is static and useless.  
**With data passing:** View becomes dynamic and powerful.

---

### 🏠 Real-World Analogy

| Part | Analogy |
|------|---------|
| Controller | Waiter takes your name and writes it on a sticky note |
| Data | Your name written on the sticky note |
| View | The chef reads the sticky note and writes "Welcome, [your name]" on the plate |
| Browser | You see your name on the plate |

The chef (view) couldn't know your name unless the waiter (controller) gave it.

---

### 🔧 Hands-On: Pass Simple Data

Open `app/Http/Controllers/PageController.php` and modify the `home()` method:

```php
public function home()
{
    $siteName = "My Laravel Learning Site";
    $currentYear = date('Y');
    
    return view('welcome', [
        'siteName' => $siteName,
        'currentYear' => $currentYear
    ]);
}
```

---

### 🔧 Step 2: Receive the Data in Your View

Open `resources/views/welcome.blade.php` and replace its content with:

```html
<!DOCTYPE html>
<html>
<head>
    <title>{{ $siteName }}</title>
</head>
<body>
    <h1>Welcome to {{ $siteName }}</h1>
    <p>Current year: {{ $currentYear }}</p>
    <p>I am learning Laravel step by step.</p>
</body>
</html>
```

---

### 🔧 Step 3: See the Result

Visit `http://127.0.0.1:8000`

You should see:
- The site name appears dynamically
- The current year appears automatically

---

### 📘 The Syntax: `{{ }}` (Blade Echo)

| What you write | What Laravel does |
|----------------|-------------------|
| `{{ $siteName }}` | Replaces with the value of `$siteName` |
| `{{ date('Y') }}` | Runs PHP function and shows result |
| `{{ $currentYear }}` | Replaces with the value from controller |

**Important:** `{{ }}` automatically escapes HTML for security. If you try to inject `<script>alert('hack')</script>`, Laravel converts it to safe text.

---

### 🔧 Multiple Ways to Pass Data

All three methods below do the **exact same thing**:

**Method 1 (associative array)**
```php
return view('welcome', ['name' => 'John', 'age' => 25]);
```

**Method 2 (with() method)**
```php
return view('welcome')->with('name', 'John')->with('age', 25);
```

**Method 3 (compact) — most common in real projects**
```php
$name = 'John';
$age = 25;
return view('welcome', compact('name', 'age'));
```

`compact('name', 'age')` creates: `['name' => 'John', 'age' => 25]`

---

### 🧪 Challenge: Pass Data to About Page

Modify your `about()` method in `PageController`:

```php
public function about()
{
    $author = "Your Name";
    $learningDays = 6;  // You're on Day 6!
    $goal = "Master Laravel from scratch";
    
    return view('about', compact('author', 'learningDays', 'goal'));
}
```

Then modify `resources/views/about.blade.php` to display:

```
About Me
Author: [author name]
Learning day: [learningDays]
Goal: [goal]
```


### 📝 Summary of Today

| Concept | Code |
|---------|------|
| Pass data from controller | `return view('name', ['key' => $value])` |
| Pass using compact | `return view('name', compact('variable1', 'variable2'))` |
| Display data in view | `{{ $variableName }}` |
| Escape HTML automatically | `{{ }}` (safe) |

---

### ✅ Your Task Before Day 7

1. Pass at least 3 pieces of data from controller to view
2. Use `{{ }}` to display them in the view
3. Complete the "About Page" challenge above


