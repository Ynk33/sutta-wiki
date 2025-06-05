import H1 from "@/components/ui/h1";
import React from "react";
import { Components } from "react-markdown";

export const markdownComponents: Components = {
    h1: ({ children }: React.ComponentProps<"h1">) => <H1>{children}</H1>
    // Add more components as needed
}