# UI/UX & Frontend Development Rules

## 1. Dynamic Design (No Hardcoding)
- **Data-Driven UI**: Never hardcode data in the views (Blade/HTML). All textual content, lists, menu items, or configurations should come from the database, language files, or configuration files (e.g., `config/sidebar.php`).
- **Dynamic CSS/Themes**: Avoid inline CSS and hardcoded colors. Use CSS variables, Bootstrap 5 utility classes, or AdminLTE standard classes so the theme can adapt dynamically (e.g., dark mode compatibility).

## 2. Premium & Modern Aesthetics
- Ensure the interface feels responsive and alive by using hover effects and micro-animations where appropriate.
- Adhere to the spacing (margin/padding) standards provided by the CSS framework (Bootstrap 5) to maintain consistency.

## 3. Reusable Components
- Break down complex UI sections into smaller, reusable Blade components or partials (`resources/views/layouts/partials/` or `resources/views/components/`).
- If a UI block is repeated, use a `@foreach` loop with dynamic data rather than copying and pasting HTML blocks.

## 4. Design Consistency (Uniformity)
- **Global Consistency**: Every page in the project MUST share the exact same design language. 
- **Elements & Layout**: Colors, button styles, positioning, and overall layout must remain identical and consistent across all screens. Do not introduce new colors or button styles on a per-page basis; always reuse global CSS classes or Blade components.
