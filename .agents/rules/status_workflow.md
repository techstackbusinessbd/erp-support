---
description: Project workflow and working status tracking rules.
---

# Working Status Workflow Rules

1. **Always Check Status First:**
   - BEFORE writing any code or starting a new feature, you MUST read the `docs/WORKING_STATUS.md` file.
   - This ensures you understand what has already been done and what the current pending tasks are.

2. **Update Status Continuously:**
   - Whenever you complete a feature, module, or significant task, you MUST update `docs/WORKING_STATUS.md` to reflect the progress (e.g., changing `[ ]` to `[x]`).
   - If a new requirement is added by the user, add it to the pending list in the working status.

3. **Alignment with Git Rules:**
   - Remember that all status updates and code changes must happen on the `development` branch, as per the Git Workflow rules.
