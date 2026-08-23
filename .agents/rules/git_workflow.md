---
description: Git branching and deployment workflow rules.
---

# Git Workflow & Deployment Rules

1. **Development Branch First:**
   - NEVER commit or push code directly to the `production` or `main` branch.
   - All new features, bug fixes, and modifications MUST be committed and pushed to the `development` (or `develop`) branch first.

2. **User Approval for Production:**
   - Code can only be merged into or pushed to the `production` (or `main`) branch AFTER the user gives explicit "final approval".
   - When the user approves, you may create a Pull Request or merge the `development` branch into the `production` branch and push it.

3. **General Safety:**
   - Always verify which branch you are on before making any commits (`git branch`).
   - If the `development` branch does not exist, ask the user or create it from the main branch before starting work.
