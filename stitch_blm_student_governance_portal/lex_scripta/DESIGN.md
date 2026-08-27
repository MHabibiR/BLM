---
name: Lex Scripta
colors:
  surface: '#f7f9fb'
  surface-dim: '#d8dadc'
  surface-bright: '#f7f9fb'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f2f4f6'
  surface-container: '#eceef0'
  surface-container-high: '#e6e8ea'
  surface-container-highest: '#e0e3e5'
  on-surface: '#191c1e'
  on-surface-variant: '#43474e'
  inverse-surface: '#2d3133'
  inverse-on-surface: '#eff1f3'
  outline: '#74777f'
  outline-variant: '#c4c6cf'
  surface-tint: '#455f88'
  primary: '#002045'
  on-primary: '#ffffff'
  primary-container: '#1a365d'
  on-primary-container: '#86a0cd'
  inverse-primary: '#adc7f7'
  secondary: '#735c00'
  on-secondary: '#ffffff'
  secondary-container: '#fed65b'
  on-secondary-container: '#745c00'
  tertiary: '#172131'
  on-tertiary: '#ffffff'
  tertiary-container: '#2c3647'
  on-tertiary-container: '#959fb3'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d6e3ff'
  primary-fixed-dim: '#adc7f7'
  on-primary-fixed: '#001b3c'
  on-primary-fixed-variant: '#2d476f'
  secondary-fixed: '#ffe088'
  secondary-fixed-dim: '#e9c349'
  on-secondary-fixed: '#241a00'
  on-secondary-fixed-variant: '#574500'
  tertiary-fixed: '#d9e3f9'
  tertiary-fixed-dim: '#bdc7dc'
  on-tertiary-fixed: '#121c2c'
  on-tertiary-fixed-variant: '#3d4759'
  background: '#f7f9fb'
  on-background: '#191c1e'
  surface-variant: '#e0e3e5'
  success-emerald: '#10b981'
  warning-amber: '#f59e0b'
  error-rose: '#e11d48'
  info-blue: '#3b82f6'
  slate-text: '#1e293b'
typography:
  display:
    fontFamily: Geist
    fontSize: 48px
    fontWeight: '700'
    lineHeight: '1.1'
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Geist
    fontSize: 32px
    fontWeight: '600'
    lineHeight: '1.2'
  headline-lg-mobile:
    fontFamily: Geist
    fontSize: 24px
    fontWeight: '600'
    lineHeight: '1.2'
  headline-md:
    fontFamily: Geist
    fontSize: 24px
    fontWeight: '600'
    lineHeight: '1.3'
  headline-sm:
    fontFamily: Geist
    fontSize: 20px
    fontWeight: '600'
    lineHeight: '1.4'
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.6'
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.5'
  body-sm:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '400'
    lineHeight: '1.5'
  label-md:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '500'
    lineHeight: '1'
    letterSpacing: 0.01em
  label-sm:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '600'
    lineHeight: '1'
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  base: 4px
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 40px
  2xl: 64px
  gutter: 16px
  margin-mobile: 16px
  margin-desktop: 32px
  max-width: 1280px
---

## Brand & Style

The design system for this student legislative portal is built on the pillars of **authority, transparency, and modern governance**. As a platform representing the Faculty of Computer Science, the visual language must bridge the gap between traditional academic prestige and the precision of technology.

The chosen style is **Corporate / Modern** with a focus on high-density information management. It borrows the clean, functional aesthetics of modern SaaS platforms—utilizing structured data grids, clear information hierarchies, and professional color palettes—to evoke a sense of reliability and official status. 

The UI should feel:
*   **Institutional:** Established and serious, reinforcing the legislative power of the BLM.
*   **Transparent:** Open and clear, particularly in data visualization and status tracking.
*   **Efficient:** Minimizing friction for student feedback and administrative audits.

## Colors

The palette is anchored by **Navy Blue (#1a365d)**, providing a stable, authoritative foundation suitable for a legislative body. **Gold (#d4af37)** is used sparingly as an "Academic Premium" accent for highlights, primary calls to action, and meaningful status indicators (e.g., "Honors" or "Verified").

The color system relies heavily on a neutral "Slate" and "Zinc" scale to maintain readability in data-heavy dashboard environments. Functional colors (Emerald, Amber, Rose) are utilized for status tracking of program work (Proker) and aspiration stages, ensuring users can scan for progress instantly. Backgrounds should favor "Clean White" (#FFFFFF) for content areas and "Light Slate" (#F8FAFC) for page-level backgrounds to create subtle depth.

## Typography

This design system uses a dual-font approach. **Geist** is employed for headlines and display elements to provide a sharp, technical, and precise feel—nodding to the Faculty of Computer Science's identity. **Inter** is used for all body text, labels, and form inputs due to its exceptional legibility at small sizes and neutral, professional tone.

Hierarchy is maintained through consistent weight application:
*   Use **SemiBold (600)** or **Bold (700)** for structural headings.
*   Use **Medium (500)** for interactive labels and button text.
*   Maintain a generous line height (1.5 - 1.6) for body text to ensure academic documents and reports are comfortable to read on-screen.

## Layout & Spacing

The design follows a **12-column fluid grid** for desktop and a **4-column fluid grid** for mobile. The layout philosophy centers on "The Content Container"—a fixed-width central area (1280px max) that keeps data structured and prevents eye strain on ultra-wide monitors.

A strict **8px spacing scale** ensures a consistent rhythm across all components. For dashboard views, use "Compact" spacing (8px–16px) to maximize the visibility of data tables and audit logs. For the public-facing Company Profile, use "Comfortable" spacing (40px–64px) to emphasize the brand and mission.

**Responsive Rules:**
*   **Mobile (<768px):** Single column stacks; full-width buttons; side-scrollable data tables.
*   **Tablet (768px - 1024px):** Condensed sidebars; 2-column card layouts.
*   **Desktop (>1024px):** Permanent navigation sidebar for Dashboards; full 12-column distribution.

## Elevation & Depth

To maintain a "Professional & Trustworthy" look, this design system avoids heavy shadows and floating elements. Instead, it uses **Tonal Layers and Low-Contrast Outlines**.

*   **The Canvas:** The primary background is the lowest layer (Neutral #F8FAFC).
*   **The Surface:** Components like cards, tables, and sections use a white background with a subtle border (1px, Slate-200) to define boundaries.
*   **Interactive Elevation:** Only use shadows for "Floating" elements like dropdown menus, modals, or tooltips. These shadows should be extra-diffused (0px 4px 12px) with very low opacity (8–10%) to maintain a flat, modern aesthetic.
*   **Active States:** Use a subtle primary-colored inner glow or a thicker border (2px) to denote focus, rather than increasing shadow depth.

## Shapes

The shape language is **Soft (0.25rem / 4px)**. This choice strikes a balance between the rigid formality of "Sharp" corners (which can feel too brutalist) and the playfulness of "Rounded" corners (which can feel too casual for a legislative portal). 

*   **Standard Elements:** Buttons, Input fields, and Small Cards use 4px (rounded-sm).
*   **Large Containers:** Dashboard panels and main content sections use 8px (rounded-lg) to create a softer frame for the overall layout.
*   **System Indicators:** Status pills and tags should use a fully rounded "Pill" shape (999px) to distinguish them from interactive buttons.

## Components

### Buttons
*   **Primary:** Solid Navy Blue (#1a365d) with white text. High contrast, 4px radius.
*   **Secondary:** Ghost style (Navy Blue border and text).
*   **Tertiary/Accent:** Solid Gold (#d4af37) with Navy text, used only for critical "Submit Aspiration" or "Approve Audit" actions.

### Status Chips (Pills)
*   Used for "Proker" status and "Aspiration" tracking.
*   Colors: Green (Selesai), Yellow (Proses), Slate (Belum Dimulai). 
*   Style: Light background tint with dark text (e.g., Light Green bg with Dark Green text).

### Cards
*   Cards must have a 1px border (#e2e8f0). 
*   No shadows by default; use a very subtle shadow (4px blur) only on hover to indicate interactivity.

### Forms & Inputs
*   **Fields:** White background, 1px border, Geist font for values.
*   **Validation:** Use clear, high-contrast red (#e11d48) for errors, positioned below the field.
*   **Labels:** Use Inter SemiBold, 12px, Uppercase for clear categorization.

### Data Tables (Audit & Proker)
*   Zebra-striping (alternating row colors) using #F8FAFC.
*   Sticky headers for long audit lists.
*   Numeric data should use monospaced Geist characters for alignment.

### Icons
*   Use **Lucide React** icons with a 1.5px stroke width. 
*   Icons should always be paired with text labels in navigation to ensure accessibility and clarity.