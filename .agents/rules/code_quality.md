# Code Quality & Standards

## 1. Error-Free & Warning-Free Code
- **Zero Warnings**: Code must be written in a way that generates zero IDE warnings. Always ensure variables are defined, imported properly, and unused variables are removed.
- **Error-Free**: Before proposing any code or committing, double-check for syntax errors, logical errors, or missing dependencies.
- **Strict Typing (PHP/Laravel)**: Use strong typing for method arguments and return types where applicable.
- **Null Safety**: Always check for null values before accessing object properties (e.g., `$user?->name` or `optional($user)->name`).

## 2. Refactoring & Best Practices
- Follow standard Laravel conventions (PSR-12).
- Keep controllers thin and move complex logic to Services or Actions.
- Ensure all views and frontend components are properly formatted.

*Note: As an agent, always self-review code to ensure it meets these "Error-less and Warning-less" standards before finalizing a task.*
